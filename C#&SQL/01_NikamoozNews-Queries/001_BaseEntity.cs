using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NikamoozNews.Entities
{
    public class BaseEntity<TID>
    {
        public TID Id { get; set; }
        public int InsertBy { get; set; }
        public int UpdateBy { get; set; }
        public int InsertDate { get; set; }
        public int UpdateDate { get; set; }

    }
}
